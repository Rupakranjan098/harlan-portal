import React, { useState } from 'react';

const SDGs = [
    { id: 3, title: 'Good Health & Well-being', color: '#E5243B', icon: 'fas fa-heartbeat' },
    { id: 6, title: 'Clean Water & Sanitation', color: '#26BDE2', icon: 'fas fa-tint' },
    { id: 7, title: 'Affordable & Clean Energy', color: '#FCC30B', icon: 'fas fa-sun' },
    { id: 8, title: 'Decent Work & Economic Growth', color: '#A21942', icon: 'fas fa-chart-line' },
    { id: 9, title: 'Industry, Innovation & Infrastructure', color: '#FD6925', icon: 'fas fa-industry' },
    { id: 11, title: 'Sustainable Cities & Communities', color: '#BF8B2E', icon: 'fas fa-city' },
    { id: 13, title: 'Climate Action', color: '#3F7E44', icon: 'fas fa-globe-americas' }
];

export default function SdgGrid() {
    const [hoveredId, setHoveredId] = useState(null);

    return (
        <div style={{
            display: 'grid',
            gridTemplateColumns: 'repeat(auto-fill, minmax(200px, 1fr))',
            gap: '20px',
            marginTop: '40px'
        }}>
            {SDGs.map((sdg) => (
                <div
                    key={sdg.id}
                    onMouseEnter={() => setHoveredId(sdg.id)}
                    onMouseLeave={() => setHoveredId(null)}
                    style={{
                        aspectRatio: '1',
                        borderRadius: '12px',
                        display: 'flex',
                        flexDirection: 'column',
                        alignItems: 'center',
                        justifyContent: 'center',
                        textAlign: 'center',
                        padding: '20px',
                        color: 'white',
                        fontWeight: '700',
                        cursor: 'default',
                        position: 'relative',
                        overflow: 'hidden',
                        background: sdg.color,
                        transform: hoveredId === sdg.id ? 'scale(1.08)' : 'scale(1)',
                        transition: 'transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s',
                        boxShadow: hoveredId === sdg.id ? `0 15px 30px ${sdg.color}66` : '0 4px 6px rgba(0,0,0,0.1)',
                        zIndex: hoveredId === sdg.id ? 10 : 1
                    }}
                >
                    <div style={{
                        position: 'absolute',
                        top: 0, left: 0, right: 0, bottom: 0,
                        background: 'linear-gradient(to bottom, rgba(255,255,255,0.2), transparent)',
                        pointerEvents: 'none'
                    }} />
                    <i className={sdg.icon} style={{
                        fontSize: hoveredId === sdg.id ? '48px' : '40px',
                        marginBottom: '15px',
                        transition: 'font-size 0.3s ease'
                    }}></i>
                    <span style={{
                        fontSize: '15px',
                        lineHeight: '1.4',
                        textShadow: '0 2px 4px rgba(0,0,0,0.2)'
                    }}>
                        {sdg.id}. {sdg.title}
                    </span>
                </div>
            ))}
        </div>
    );
}
